function calculateGrade(marks) {
  if (!Array.isArray(marks) || marks.length === 0) {
    return "Please provide a valid list of marks.";
  }

  // Calculate the sum of marks
  let sum = 0;
  for (let i = 0; i < marks.length; i++) {
    sum += marks[i];
  }

  // Calculate the average
  const average = sum / marks.length;
  let grade = "";

  // Determine the grade based on the average
  if (average >= 90) {
    grade = "A";
  } else if (average >= 80) {
    grade = "B";
  } else if (average >= 70) {
    grade = "C";
  } else if (average >= 60) {
    grade = "D";
  } else {
    grade = "F";
  }

  // Return a summary string
  return `The average mark is ${average.toFixed(
    2
  )}. The corresponding grade is ${grade}.`;
}

// Example Usage:
const studentMarks1 = [85, 92, 78, 65, 95];
console.log(calculateGrade(studentMarks1)); // Output: The average mark is 83.00. The corresponding grade is B.

const studentMarks2 = [55, 62, 48, 58, 65];
console.log(calculateGrade(studentMarks2)); // Output: The average mark is 57.60. The corresponding grade is F.
