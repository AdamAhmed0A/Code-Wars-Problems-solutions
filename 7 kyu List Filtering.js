function filter_list(l) {
    return l.filter((item) => {
        return (typeof item === "number")
    })
}

console.log(filter_list([1, 'a', 2, 3, 4, 5]))
