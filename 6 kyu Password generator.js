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
