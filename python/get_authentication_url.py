api_id = "08bd2d1f3c4d645cdfa32071978a4a1c"
api_secret = "a953130215e15c58c1e27c5b3ff4f41e"

def URL_init(body):
    URL = "https://" + body + "?"
    return URL

def URL_add_parameter(prefix, param, value):
    previous_char = prefix[len(prefix) - 1]
    if previous_char == '?':
        URL = prefix + param + "=" + value
    else:
        URL = prefix + "&" + param + "=" + value
    return URL

def authenticate():
    # variables
    redirect_URI = "http://connorw.me/hackathon/uncommonhacks/thanks.html"
    scope_list = "basic names genomes phenotypes:read:all"
    global api_id
    # construct authentication URL
    auth_URL = URL_init("api.23andme.com/authorize/")
    auth_URL = URL_add_parameter(auth_URL, "response_type", "code")
    auth_URL = URL_add_parameter(auth_URL, "client_id", api_id)
    auth_URL = URL_add_parameter(auth_URL, "scope", scope_list)
    # testing
    # print(auth_URL)
    return auth_URL

def main():
    auth_URL = authenticate()
    return auth_URL

if __name__ == "__main__":
    main()
