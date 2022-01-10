<?php

class Delete extends DbConn{
    public function deleteTask($id)
    {
        $stmt = $this->connect()->prepare('DELETE FROM task WHERE id=?;');
        if (!$stmt->execute([$id])) {
            $stmt = null;
        }
    }
}