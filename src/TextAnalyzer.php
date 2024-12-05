<?php

namespace TextAnalysis;

/**
 * TextAnalyzer Class
 * Provides methods for analyzing text, including word count, character count, and sentence count.
 */
class TextAnalyzer
{
    /**
     * Analyze the given text and return details about it.
     * 
     * @param string $text The input text to analyze.
     * @return array Associative array containing word count, character count (excluding spaces), and sentence count.
     */
    public static function analyze($text)
    {
        // Count the number of words in the text
        $wordCount = str_word_count($text);

        // Count the number of characters, excluding spaces
        $charCount = mb_strlen(preg_replace('/\s+/', '', $text));

        // Count the number of sentences by identifying periods (.)
        $sentenceCount = substr_count($text, '.');

        // Return the analysis as an associative array
        return [
            'word_count' => $wordCount,
            'char_count' => $charCount,
            'sentence_count' => $sentenceCount,
        ];
    }
}
