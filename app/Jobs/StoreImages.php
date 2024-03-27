<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class StoreImages implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */

    protected $disk;
    protected $data;

    public function __construct($disk, $data)
    {
        $this->disk = $disk;
        $this->data = $data;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        switch ($this->disk) {
            case 'public-image-user':
                Storage::disk($this->disk)->put($input['profile_photo_path']->getClientOriginalName(), $input['profile_photo_path']->get());
                break;
            default:
                Storage::disk($this->disk)->put($input['image']->getClientOriginalName(), $input['image']->get());
        }
    }
}
