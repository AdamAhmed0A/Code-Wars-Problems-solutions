def lowercase_count(str):
    count = 0
    for a in str: 
        if a.islower(): count += 1
    return count
