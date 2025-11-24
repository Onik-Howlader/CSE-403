function formatWithCommas(number) {
  if (typeof number !== "number") {
    return "Invalid input";
  }
  return number.toLocaleString("en-US");
}

console.log(formatWithCommas(1234));
console.log(formatWithCommas(1234567));
console.log(formatWithCommas(100));
console.log(formatWithCommas(9876543210));