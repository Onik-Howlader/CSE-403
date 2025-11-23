// Sample data: Array of student marks (0 to 100)
const studentMarks = [85, 92, 78, 65, 98, 70, 55, 88];
  @param {number[]} marksArray
  @returns {number} 
 
function calculateAverage(marksArray) {
    if (marksArray.length === 0) {
        return 0;
    }
    // 1. Calculate the sum of all marks
    const totalSum = marksArray.reduce((sum, mark) => sum + mark, 0);
    // 2. Calculate the average
    const average = totalSum / marksArray.length;
    return average;
}
  @param {number} average
  @returns {string}

function determineGrade(average) {
    let grade = "";
    // Define the grading scale
    if (average >= 90) {
        grade = "A (Excellent)";
    } else if (average >= 80) {
        grade = "B (Good)";
    } else if (average >= 70) {
        grade = "C (Satisfactory)";
    } else if (average >= 60) {
        grade = "D (Needs Improvement)";
    } else {
        grade = "F (Fail)";
    } 
    return grade;
}
// Main execution
const averageMark = calculateAverage(studentMarks);
const finalGrade = determineGrade(averageMark);
console.log(`--- Student Grade Program ---`);
console.log(`Student Marks: [${studentMarks.join(', ')}]`);
console.log(`Total Students: ${studentMarks.length}`);
console.log(`Calculated Average Mark: ${averageMark.toFixed(2)}`);
console.log(`Corresponding Grade: ${finalGrade}`);