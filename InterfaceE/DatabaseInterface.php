<?php
interface DatabaseInterface{
    public function getOrders(): array;
    public function getOrderbyId(int $id);
    public function createOrder(array $data) : bool;
    public function updateOrder(int $id, array $data) :bool;
    public function deleteOrder(int $id):bool;

}