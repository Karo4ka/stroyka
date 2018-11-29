<?php

class Transaction /*extends User*/{

    public $TransactionID, $ReceiverID, $GiverID, $DateTime, $StorageID, $ObjectID;

    function __construct($TransactionID, $ReceiverID, $GiverID, $DateTime, $StorageID, $ObjectID)
    {
        $this->TransactionID = $TransactionID;
        $this->ReceiverID = $ReceiverID;
        $this->GiverID = $GiverID;
        $this->DateTime =$DateTime;
        $this->StorageID = $StorageID;
        $this->ObjectID = $ObjectID;

    }
}
$Transaction1= new Transaction(1,"Vasia",9,"12.30.18",2,2);
   print_r($Transaction1);
    /*
    public function getTransactionID(){
        return $this->TransactionID;
    }

    public function getReceiverID(){
        return $this->ReceiverID;
    }

    public function getGiverID(){
        return $this->GiverID;
    }

    public function getDateTime(){
        return $this->DateTime;
    }

    public function getStorageID(){
        return $this->StorageID;
    }

    public function getObjectID(){
        return $this->ObjectID;
    }

}*/
