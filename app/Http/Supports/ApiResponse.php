<?php

namespace App\Http\Supports;

trait ApiResponse {
    protected $_ok = true;
    protected $_code = 200;
    protected $_message = [];
    protected $_data = [];
    protected $_metaData = [];

    protected function setMessage($message = [])
    {
        $this->_message = $message;
    }

    protected function getMessage()
    {
        return $this->_message;
    }

    public function getData()
    {
        return $this->_data;
    }

    public function setData($data = [])
    {
        $this->_data = $data;
        return $this;
    }

    public function setMetaData($metaData = [])
    {
        $this->_metaData = $metaData;
    }

    public function getMetaData()
    {
        return $this->_metaData;
    }

    public function setOk($ok = true)
    {
        $this->_ok = $ok;
        return $this;
    }

    public function renderJson($data = [], $code = 200)
    {
        $data = $this->_buildResponse($data);
        return response()->json($data, $code);
    }

    public function renderErrorJson($data = [], $code = 200)
    {
        $this->setOk(false);
        $this->renderJson();
    }

    protected function _buildResponse($data = [])
    {
        return array_merge(array(
            'status' => $this->_ok,
            'message' => (array)$this->getMessage(),
            'data' => $this->getData(),
            'meta' => $this->getMetaData()
        ), $data);
    }
}