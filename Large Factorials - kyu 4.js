https://www.codewars.com/kata/557f6437bf8dcdd135000010/train/javascript
//////////////////////////////////////
function factorial(n) {
    if (n < 0) {
        return null;
    }
    let result = '1';
    for (let i = 1; i <= n; i++) {
        result = multiplyStrings(result, i.toString());
    }
    return result;
}
function multiplyStrings(num1, num2) {
    const len1 = num1.length;
    const len2 = num2.length;
    const result = new Array(len1 + len2).fill(0);

    for (let i = len1 - 1; i >= 0; i--) {
        for (let j = len2 - 1; j >= 0; j--) {
            const product = Number(num1[i]) * Number(num2[j]);
            const sum = result[i + j + 1] + product;

            result[i + j + 1] = sum % 10;
            result[i + j] += Math.floor(sum / 10);
        }
    }

    return result.join('').replace(/^0+/, '') || '0';
}

// Another Solution and more complex :D 
function factorial(n) {
    if (n < 0) {
        return null;
    }

    let result = '1';

    for (let i = 2; i <= n; i++) {
        let carry = 0;

        for (let j = result.length - 1; j >= 0; j--) {
            const product = i * Number(result[j]) + carry;
            result = result.substring(0, j) + (product % 10) + result.substring(j + 1);
            carry = Math.floor(product / 10);
        }

        while (carry > 0) {
            result = carry % 10 + result;
            carry = Math.floor(carry / 10);
        }
    }

    return result;
}
