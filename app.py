from flask import Flask, render_template, request
import mysql.connector
import hashlib

# app flask
app = Flask(__name__)

# conexão mysql
try:
    con = mysql.connector.Connect(host="127.0.0.1", database="bd_projeto", user="root", password="270304gabe!")

except Exception as error:
    print("Erro a conectar no banco de dados...")
    print(error)
    exit()


if(con.is_connected()):
    @app.route("/")
    @app.route("/indexLogin")
    def render_login():
        return render_template("login.html")
        

    @app.route("/indexRegister")
    def render_register():
        return render_template("register.html")



    # Crud no banco de dados
    @app.route("/login", methods=["POST"])
    def login():
        if (request.method == "POST"):
            email = request.form["email"]
            password = hashlib.md5(str.encode(request.form["senha"])).hexdigest() 

            try:
                query = con.cursor()       
                query.execute(f"SELECT * FROM registro WHERE email LIKE '{email}' AND password LIKE '{password}'")

                if(query.fetchone()):
                    return render_template("successLogin.html")
                    query.close()

                else:
                    return render_template("failedLogin.html")
                    query.close()
            
            except:
                return render_template("failedLogin.html")
                query.close()


        else:
            return render_template("failed.html")


    @app.route("/register", methods=["POST"])
    def register():
        if(request.method == "POST"):
            name = request.form["username"]
            email = request.form["email"]
            password = hashlib.md5(str.encode(request.form["senha"])).hexdigest()

            try:
                query = con.cursor()
                query.execute(f"INSERT INTO registro (name, email, password) VALUES ('{name}', '{email}', '{password}');")
                con.commit()
                return render_template("successRegister.html")

            except:
                return render_template("failedRegister.html")
                query.close()

        else:
            return render_template("failed.html")

    app.run()
