# Twitter Analyzer

## Description

An example of using OpenAI in a Laravel application.

## How to Install

1. Clone the repository:
    ```bash
    git clone https://github.com/your_username/twitter-analyzer.git
    cd twitter-analyzer
    ```

2. Install the dependencies:
    ```bash
    composer install
    npm install
    npm run dev
    ```

3. Copy the example environment file and update the necessary configurations:
    ```bash
    cp .env.example .env
    ```
    
4. Generate an application key:
    ```bash
    php artisan key:generate
    ```

5. Add your OpenAI API key in the [.env](http://_vscodecontentref_/0) file:
    ```dotenv
    OPENAI_API_KEY=your_openai_api_key_here
    ```

## Notes

- Make sure you have an OpenAI key generated from this link: [OpenAI Settings](https://platform.openai.com/settings)
- Ensure you have credit on your OpenAI account or, if you have a free-tier account, you may need to add a credit card to continue using the OpenAI API. they only give $18 credit for limited time, upon expiration, credit card is needed. 
- If you have a different approach on this, feel free to create an issue or make a PR.