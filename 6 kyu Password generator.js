function passwordGen() {
    let length = Math.floor(Math.random() * 15 + 6)
    let chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789"
    
    let generate_password = Array.from({length}, () => chars[Math.floor(Math.random() * chars.length)]).join('')
    
    let upperRegex = /[A-Z]/
    let lowerRegex = /[a-z]/
    let numbersRegex = /[0-9]/
    if(!upperRegex.test(generate_password) || !lowerRegex.test(generate_password) || !numbersRegex.test(generate_password)){
        return passwordGen()
    }
    return generate_password
}

console.log(passwordGen());

/// Another Solution ///
function passwordGen() {
    let chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    let res = "";
    let length = Math.floor(Math.random() * 15 + 6);
    let upper = false;
    let lower = false;
    let numbers = false;

    for (let i = 0; i < length; i++) {
        let randomchar = chars[Math.floor(Math.random() * chars.length)];
        res += randomchar;

        if ("abcdefghijklmnopqrstuvwxyz".includes(randomchar)) {
            lower = true;
        } else if ("ABCDEFGHIJKLMNOPQRSTUVWXYZ".includes(randomchar)) {
            upper = true;
        } else if ("0123456789".includes(randomchar)) {
            numbers = true;
        }
    }

    if (!(lower && upper && numbers)) {
        return passwordGen();
    }

    let charCount = {};
    for (let char of res) {
        charCount[char] = (charCount[char] || 0) + 1;
        if (charCount[char] / res.length > 0.5) {
            return passwordGen();
        }
    }

    return res;
}

console.log(passwordGen());
