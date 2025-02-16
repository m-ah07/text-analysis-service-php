# Text Analysis Service (php)

Text Analysis Service is a lightweight PHP service designed to analyze textual data efficiently. This tool provides functionalities to extract insights such as:

- Word count
- Character count (excluding spaces)
- Sentence count

It serves as a quick solution for developers who need text analysis capabilities in their applications. The modular structure allows for easy integration and expansion of additional features in the future.

---

## Features
- Count the number of words in a text.
- Count the number of characters (excluding spaces).
- Count the number of sentences.

## Installation
1. Clone the repository:
    ```bash
    git clone https://github.com/m-ah07/text-analysis-service-php.git
    ```
2. Navigate to the project directory.

## Usage
Here’s a simple example of how to use the Text Analysis Service:

```bash
require_once 'src/TextAnalyzer.php';

use TextAnalysis\TextAnalyzer;

$text = "This is a sample text.";

$analysis = TextAnalyzer::analyze($text);

echo "Word Count: " . $analysis['word_count'] . "\n";
```

## Directory Structure
```plaintext
text-analysis-service-php/
├── src/
│   └── TextAnalyzer.php
├── examples/
│   └── example.php
├── LICENSE
├── README.md
└── .gitignore
```

## Contributing
Feel free to fork this repository and submit pull requests to enhance functionality or add features.

## Show Your Support
If you found this project helpful, please consider giving it a ⭐ on GitHub. Your support means the world to us!
