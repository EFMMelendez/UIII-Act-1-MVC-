<?php
/*
	CRUD creado por Oscar Amado
	Contacto: oscarfamado@gmail.com
*/
class Administrator extends db
{

	private function view_productos()
	{
		try {
			$SQL = "SELECT * FROM producto";
			$result = $this->connect()->prepare($SQL);
			$result->execute();
			return $result->fetchAll(PDO::FETCH_OBJ);
		} catch (Exception $e) {
			die('Error Administrator(view_productos) ' . $e->getMessage());
		} finally {
			$result = null;
		}
	}

	function get_view_productos()
	{
		return $this->view_productos();
	}

	private function register_producto($data)
	{
		try {
			$SQL = 'INSERT INTO producto (nombre_producto, categoria, precio, color, material, talla, marca) VALUES (?,?,?,?,?,?,?)';
			$result = $this->connect()->prepare($SQL);
			$result->execute(
				array(
					$data['nombre_producto'],
					$data['categoria'],
					$data['precio'],
					$data['color'],
					$data['material'],
					$data['talla'],
					$data['marca']
				)
			);
		} catch (Exception $e) {
			die('Error Administrator(register_producto) ' . $e->getMessage());
		} finally {
			$result = null;
		}
	}

	function set_register_producto($data)
	{
		$this->register_producto($data);
	}

	private function update_producto($data)
	{
		try {
			$SQL = 'UPDATE producto SET nombre_producto = ?, categoria = ?, precio = ?, color = ?, material = ?, talla = ?, marca = ? WHERE id_producto = ?';
			$result = $this->connect()->prepare($SQL);
			$result->execute(
				array(
					$data['nombre_producto'],
					$data['categoria'],
					$data['precio'],
					$data['color'],
					$data['material'],
					$data['talla'],
					$data['marca'],
					$data['id_producto']
				)
			);
		} catch (Exception $e) {
			die('Error Administrator(update_producto) ' . $e->getMessage());
		} finally {
			$result = null;
		}
	}

	function set_update_producto($data)
	{
		$this->update_producto($data);
	}


	private function delete_producto($id_producto)
	{
		try {
			$SQL = 'DELETE FROM producto WHERE id_producto = ?';
			$result = $this->connect()->prepare($SQL);
			$result->execute(array($id_producto));
		} catch (Exception $e) {
			die('Error Administrator(delete_producto) ' . $e->getMessage());
		} finally {
			$result = null;
		}
	}

	function set_delete_producto($id_producto)
	{
		$this->delete_producto($id_producto);
	}
}
?>
