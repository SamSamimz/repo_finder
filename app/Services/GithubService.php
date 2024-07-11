<?php
namespace App\Services;
use GuzzleHttp\Client as GuzzleClient;
class GithubService {
    protected $client;
    public function __construct() {
        $this->client = new GuzzleClient();
    }

     public function search(string $searchTerm) {
            $response = $this->client->get('https://api.github.com/search/repositories', [
                'query' => [
                    'q' => $searchTerm
                ],
                'headers' => [
                    'Accept' => 'application/vnd.github.v3+json',
                    'User-Agent' => 'RepoFinder'
                ]
            ]);
            $data = json_decode($response->getBody()->getContents(), true);
            return $data['items'] ?? [];
    }
}


?>