const args = process.argv.slice(2)
const eft=(f)=>{
    console.time()
    f()
    console.timeEnd()
}
const add=(a,b)=>{
    return a+b
}
const sub=(a,b)=>{
    return a-b
}
const mul=(a,b)=>{
    return a*b
}
const div=(a,b)=>{
    return a/b
}

eft(()=>console.log(add(5, 10)))
eft(()=>console.log(sub(15, 10)))
eft(()=>console.log(mul(5, 10)))
eft(()=>console.log(div(15, 3)))

// command: node Assignment3.js