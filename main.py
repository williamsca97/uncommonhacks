import getpass

api_id = "08bd2d1f3c4d645cdfa32071978a4a1c"
api_secret = "a953130215e15c58c1e27c5b3ff4f41e"

def authenticate():
    print("Please enter your 23andMe credentials.")
    username = input("Username: ")
    password = getpass.getpass("Password: ");
    
    # testing:
    print("Your username is {0} and your password is {1}.".format(username, password))

def main():
    authenticate()

if __name__ == "__main__":
    main()
