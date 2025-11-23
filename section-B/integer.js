/* Program 2: Function to print an integer with commas as thousands separators. */

/**
 * Formats a number with commas as thousand separators.
 * @param {number} number - The integer to format.
 * @returns {string} - The formatted number string.
 */
function formatNumberWithCommas(number) {
    if (typeof number !== 'number' || !Number.isInteger(number)) {
        console.error("Input must be an integer.");
        return;
    }

    const formattedNumber = number.toLocaleString('en-US');

    console.log(`Original Number: ${number}`);
    console.log(`Formatted Number: ${formattedNumber}`);

    return formattedNumber;
}

// Example Usage
formatNumberWithCommas(12345);
formatNumberWithCommas(987654321);
formatNumberWithCommas(500);
