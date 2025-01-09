def to_underscore(string):
    if isinstance(string, int):
        return str(string)
    up = []
    result = []
    for char in string:
        if char.isupper():
           up.append(char)
           if result:
               result.append("_")
        result.append(char.lower())
    return ("".join(result) )
