
function checkOddOrEven() {
    console.log("--- Odd or Even Checker (0 to 15) ---");
    // Loop starts at 0 and continues until the number reaches 15 (inclusive).
    for (let i = 0; i <= 15; i++) {

        if (i % 2 === 0) {
            console.log(`${i} is even`);
        } else {
            console.log(`${i} is odd`);
        }
    }
}
// Run the function
checkOddOrEven();