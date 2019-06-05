<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use DB;
use MicrosoftAzure\Storage\Blob\BlobRestProxy;
use MicrosoftAzure\Storage\Queue\QueueRestProxy;
use MicrosoftAzure\Storage\Common\ServiceException;

class ArticleController extends Controller
{
    function store(Request $request){


    $article = new Article();
    $name = $request->input('name');
    $url = $request->input('picture');
    $price = $request->input('price');

    $article->name = $name;
    $article->price = $price;
    $article->url = $url;

    // FAIRE SERVICE
    $content = "TEST";
    $article->save();
        $connectionString = "DefaultEndpointsProtocol=https;AccountName=sapushurpic;AccountKey=9nk1+oV06letJvTSUocAxoKszuRMVeDatedTP+WtUrtzVgcQxKdyLENWTrxHj+r3m5yUPrN7CWbCO7FO3cRSww==;EndpointSuffix=core.windows.net";
        $queueName = "queuepushurpic";
        $blobClient = BlobRestProxy::createBlobService($connectionString);
        $queueClient = QueueRestProxy::createQueueService($connectionString);
        $containerName = "pictures";
        $fileToUpload = "test";
        $fileToUpload = "content";

        try{
            $queueClient->createMessage($queueName, "Hello World!");
        }
        catch(ServiceException $e){
            $code = $e->getCode();
            $error_message = $e->getMessage();
            dd($code.": ".$error_message."<br />");
        }

        try{
            $blobClient->createBlockBlob($containerName, $fileToUpload, $content);
        }catch(ServiceException $ex){
            dd($ex);
        }
        dd("HO YEAH ! :)");
    }
}
