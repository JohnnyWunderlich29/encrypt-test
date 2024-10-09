<?php

namespace App\Livewire;

use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\Crypt;
use Livewire\Component;

class CryptPage extends Component
{

    public $word;

    public $encryptedWord;

    public $decryotedWord;

    public function encrypt()
    {
        $this->encryptedWord = Crypt::encrypt($this->word);
    }

    public function decrypted()
    {
        try{
            $this->decryotedWord = Crypt::decryptString($this->encryptedWord);
        } catch (DecryptException $e){
            return $e;
        }
    }

    public function render()
    {
        return view('livewire.crypt-page');
    }
}
