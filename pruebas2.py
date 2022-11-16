#!/usr/bin/python
import pymysql
db = pymysql.connect(host="localhost",    # your host, usually localhost
                     user="root",         # your username
                     passwd="",  # your password
                     db="prueba_personas")        # name of the data base

# you must create a Cursor object. It will let
#  you execute all the queries you need
cur = db.cursor()

def add():
   try:

      dni = input("Introduce el DNi de la persona: ")
      nombre = input("Introduce el nombre de la persona: ")
      edad= int(input("Introduce la edad de la persona: "))
      cur.execute("INSERT INTO personas VALUES ('" + dni + "', '" + nombre + "', " + str(edad) + ")")
      db.commit()
      print ("Persona añadida a la base de datos")
      opciones()
   except:
      db.rollback()


def read():
   try:
      cur.execute("SELECT * FROM `personas`")
      db.commit()
      for row in cur.fetchall():
         print ("DNI: " ,row[0],"Nombre: ",row[1], "Edad: ",row[2])

      opciones()
   except:
      db.rollback()


def delete():
   try:
      dni = input("Introduce el DNI de la persona: ")
      cur.execute("DELETE FROM `personas` where dni='" + dni + "'")
      db.commit()
      print ("Persona eliminada")

      opciones()
   except:
      db.rollback()


def opciones():
   print ("Elige una opcion:")
   print ("1. Añadir persona")
   print ("2. Ver listado de personas")
   print ("3. Eliminar una persona")
   opcion = int(input())
   match opcion:
        case 1:
            add()
        case 2:
            read()
        case 3:
            delete()   
        case _:
            return 0  



opciones()



db.close()










