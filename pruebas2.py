#!/usr/bin/python
import pymysql
db = pymysql.connect(host="localhost",    # your host, usually localhost
                     user="root",         # your username
                     passwd="",  # your password
                     db="curso_php")        # name of the data base

# you must create a Cursor object. It will let
#  you execute all the queries you need
cur = db.cursor()



# Use all the SQL you like
try:
   cur.execute("INSERT INTO fotos VALUES (3, 'Conectandome desde python', 'foto3.jpg')")
   db.commit()
except:
   db.rollback()


# print all the first cell of all the rows

# for row in cur.fetchall():
    # print ("Nombre del archivo: " ,row[1],"Ruta del archivo: ",row[2])

db.close()



