<?php namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

use App\Http\Requests\GalleryRequest;

class GalleryRepository extends Repository
{
    // model property on class instances
    protected $model;

    protected $fileMap = [
        'image' => ['png', 'jpg', 'jpeg','svg'],
        'document' => ['pdf', 'xls', 'doc']
    ];

    protected $file_type;
    protected $config;

    // Constructor to bind model to repo
    public function __construct(Model $model)
    {
        $this->model = $model;
    }


    public function validateFile($file_type)
    {
        foreach($this->fileMap as $key => $value) {
            if(in_array($file_type, $value)) {
                $this->file_type = $key;

                return;
            }
        }

        $this->file_type = 'other';

        return;
    }

    public function fetchFileConfig():array
    {
        return config('gallery.' . $this->file_type);

    }

    public function storeFile($request)
    {
        $file = $this->fetchFileConfig();

        $file['path'] = $request->file('file')->store($file['path']);
        $file['mime_type'] = $request->file('file')->getMimeType();
        $file['original_name'] = $request->file('file')->getClientOriginalName();

        return $file;

    }

}