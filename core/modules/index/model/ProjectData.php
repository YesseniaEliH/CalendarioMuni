<?php
class ProjectData {
	public static $tablename = "empleado";


	public function ProjectData(){
		$this->nombres = "";
		$this->apellidos = "";
		$this->cargo = "";
		$this->created_at = "NOW()";
	}

	public function add(){
		$sql = "insert into empleado (nombres,apellidos,cargo)";
		$sql .= "value (\"$this->nombres\",\"$this->apellidos\",\"$this->cargo\")";
		return Executor::doit($sql);
	}

	public static function delById($id){
		$sql = "delete from ".self::$tablename." where id=$id";
		Executor::doit($sql);
	}
	public function del(){
		$sql = "delete from ".self::$tablename." where id=$this->id";
		Executor::doit($sql);
	}

// partiendo de que ya tenemos creado un objecto ProjectData previamente utilizamos el contexto
	public function update(){
		$sql = "update ".self::$tablename." set nombres=\"$this->nombres\",apellidos=\"$this->apellidos\",cargo=\"$this->cargo\" where id=$this->id";
		Executor::doit($sql);
	}

	public static function getById($id){
		$sql = "select * from ".self::$tablename." where id=$id";
		$query = Executor::doit($sql);
		return Model::one($query[0],new ProjectData());
	}

	public static function getAll(){
		$sql = "select * from ".self::$tablename;
		$query = Executor::doit($sql);
		return Model::many($query[0],new ProjectData());

	}

	public static function getLike($q){
		$sql = "select * from ".self::$tablename." where name like '%$q%'";
		$query = Executor::doit($sql);
		return Model::many($query[0],new ProjectData());
	}


}

?>
