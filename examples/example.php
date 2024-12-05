<?php

// Include the core TextAnalyzer class
require_once '../src/TextAnalyzer.php';

use TextAnalysis\TextAnalyzer;

// Sample text for analysis
$text = "This is a sample text. It contains words and sentences for analysis.";

// Perform the text analysis
$analysis = TextAnalyzer::analyze($text);

// Display the analysis results
echo "Word Count: " . $analysis['word_count'] . "\n";
echo "Character Count (excluding spaces): " . $analysis['char_count'] . "\n";
echo "Sentence Count: " . $analysis['sentence_count'] . "\n";
