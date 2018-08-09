<?php
class Advertisement extends App
{
    public function getAdvertisementList()
    {
        $result = $this->db->query('SELECT * FROM advertisement');

        $advertisementList = array();
        while ($row = $result->fetch()) {
            $advertisementList[$row['id']] = $row;
        }
        return $advertisementList;
    }

    public function getAllData()
    {
        $sql = 'SELECT * FROM `advertisement` RIGHT JOIN `category` ON advertisement.url=category.url';

        $result = $this->db->query($sql);

        $advertisementList = array();
        while ($row = $result->fetch()) {
            $advertisementList[$row['id']] = $row;
        }
        return $advertisementList;
    }

    public function getChildList($url)
    {
        $sql = 'SELECT * FROM advertisement WHERE ';

        $result = $this->db->prepare($sql);

    }


    public function getCurrentAdvertisement($id)
    {
        // Текст запроса к БД
        $sql = 'SELECT * FROM advertisement WHERE id = :id';

        // Используется подготовленный запрос
        $result = $this->db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);

        // Указываем, что хотим получить данные в виде массива
        $result->setFetchMode(PDO::FETCH_ASSOC);

        // Выполняем запрос
        $result->execute();

        // Возвращаем данные
        return $result->fetch();
    }

}