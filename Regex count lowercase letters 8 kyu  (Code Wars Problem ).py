def lowercase_count(strng):
    count = 0
    for a in strng: 
        if a.islower(): count += 1
    return count
