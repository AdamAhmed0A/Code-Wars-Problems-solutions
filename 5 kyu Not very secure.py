def alphanumeric(password):
    string = password.replace(" ", "")
    return (any(char.isdigit() for char in string))
