#!/usr/local/bin/php
<?php

/*
 * Constraint Constants
 */

const TEST_CASES_MIN = 1;
const TEST_CASES_MAX = 100;

const VALUE_MIN = 0;
const VALUE_MAX = 2147483647;

/*
 * Read File
 */

// Name of file is equal to input file
$problemName = basename( __FILE__, '.php' );

// Parse input into array
$inputFile = __DIR__ . '/' . $problemName . '.txt' ;
$inputArray = file( $inputFile );
unset($inputFile);

/*
 * Test Case Count Constraints
 */

// Check test cases for constraints
$testCases = $inputArray[0];

if( intval($testCases) < TEST_CASES_MIN || intval($testCases) > TEST_CASES_MAX )
    throw new OutOfBoundsException('Test case count out of bounds. Must be between 0 and 100');

array_shift( $inputArray );

/*
 * Test Cases Loop
 */

// Loop through test cases
$outputArray = array();

$matchedValues = array();

for( $i=0; $i<$testCases; $i++ )
{
    if( !isset( $inputArray[$i] ) )
        throw new OutOfBoundsException( 'Input Array does not contain value for key ' . $i );
    
    $test = intval( $inputArray[$i] );

    $outputArray[$i] = 0;    
    
    /*
     * Value Constriants
     */
    
    // Insert Value Constraints
    
    /*
     * Algorithm
     */
    
    // Insert Algorithm
    
}

/*
 * Output file
 */ 
$outputFile = fopen( 'output.txt', 'w' );
foreach( $outputArray as $idx => $output )
{
    fwrite( $outputFile, 'Case #' . ($idx + 1) . ': ' . $output . "\r\n" );
}
fclose( $outputFile );

exit();