<?php 
namespace App\Services;

use Google\Client;
use Google\Service\YouTube;

class YoutubeService {
    protected $client;
    protected $youtube;

    public function __construct()
    {
        $this->client = new Client();
        $this->client->setApplicationName('Repo Finder');
        $this->client->setDeveloperKey(config('youtube.api_key'));

        $this->youtube = new YouTube($this->client);
    }

    public function search($search, $maxResults = 20)
    {
        $response = $this->youtube->search->listSearch('snippet', [
            'q' => $search,
            'maxResults' => $maxResults,
        ]);

        return $this->readableResults($response->getItems());
        // return $response->getItems();

    }

    public function readableResults($items) {
        $formattedResults = [];
        foreach ($items as $item) {
            if ($item['id']['kind'] === 'youtube#video') {
                $formattedResults[] = [
                    'title' => $item['snippet']['title'],
                    'publishOn' => $item['snippet']['modelData']['publishTime'],
                    'channelUrl' =>'https://www.youtube.com/channel/'.$item['snippet']['channelId'],
                    'channelTitle' => $item['snippet']['channelTitle'],
                    'description' => $item['snippet']['description'],
                    'url' => 'https://www.youtube.com/watch?v=' . $item['id']['videoId'],
                    'thumbnail' => $item['snippet']['thumbnails']['default']['url'],
                ];
            }
        }

        return $formattedResults;


    }

}



?>