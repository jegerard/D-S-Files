<?php
class WorkHoursReport
{
  public static function fetchByProjectID($projectId){

      $db = new PDO(DB_SERVER, DB_USER, DB_PW);
      $sql = 'SELECT DATE (start_date) AS date,
      SUM(hours) AS hours
      FROM Work, tasks
      WHERE Work.task_id = Tasks.id
      AND Tasks.project_id = ?
      GROUP BY DATE (start_date)
      ORDER BY date';

      statement = $db -> prepare($sql);

      $success = $statement -> execute([$projectId]);

        $this->id=$db->lastInsertId();
  }
}
