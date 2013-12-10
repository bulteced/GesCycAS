<?php
	class Utilisateur extends Data
	{
		/**
		 * Liste des propriétés
		 */
		
		private $id;
		private $debut;
		private $fin;
		private $nbPlacesMax;
		private $leLieu;
		
		public function __construct()
		{
			$mapper_classname = get_class()."_Mapper";
			switch(func_num_args())
			{
				case 4:
					/*construction d'un objet avec tous les paramètres*/
					$this->id = func_get_arg(0);
					$this->debut = func_get_arg(1);
					$this->fin = func_get_arg(2);
					$this->nbPlacesMax = func_get_arg(3);
					$this->lieu = func_get_arg(4);
					break;
				case 1:
					/*construction d'un objet à partir de l'id*/
					$this->id = func_get_arg(0);
					$res = $mapper_classname::select(array(),array(array('field' => 'id', 'operator' => '=', 'values' => array($this->id))));
					if(count($res))
					{
						$this->debut = $res[0]['debut'];
						$this->fin = $res[0]['fin'];
						$this->nbPlacesMax = $res[0]['nbPlacesMax'];
						$this->lieu = $res[0]['lieu'];
						
					}
					break;
			}
		}
		
		function get_id()
		{
			return $this->id;
		}
		
		function set_id($id)
		{
			$this->id = $id;
		}
		
		function get_debut()
		{
			return $this->debut;
		}
		
		function set_debut($debut)
		{
			$this->debut = $debut;
		}
		
		
		function get_fin()
		{
			return $this->fin;
		}
		
		function set_fin($fin)
		{
			$this->fin = $fin;
		}
		
		
		
		function get_nbPlacesMax()
		{
			return $this->nbPlacesMax;
		}
		
		function set_nbPlacesMax($nbPlacesMax)
		{
			$this->nbPlacesMax = $nbPlacesMax;
		}
		
		function get_lieu()
		{
			return $this->lieu;
		}
		
		function set_lieu($lieu)
		{
			$this->lieu = $lieu;
		}
		static function get_list()
		{
			$mapper_classname = get_class()."_Mapper";
			$rows = $mapper_classname::select();
			return $rows;
		}
		/*
		static function get_droits($id)
		{
			$query="
				SELECT DISTINCT droit.*
				FROM utilisateur
					INNER JOIN affectation ON utilisateur.id = affectation.id_utilisateur
					INNER JOIN groupe      ON groupe.id      = affectation.id_groupe
					INNER JOIN attribution ON groupe.id      = attribution.id_groupe
					INNER JOIN droit       ON droit.id       = attribution.id_droit
				WHERE utilisateur.id = :id;
			";
			Database::connect();
			Database::select_database();
			$stmt = Database::prepare($query);
			$stmt->bindValue(':id',$id);
			$stmt->execute();
			$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
			Database::disconnect();
			return $rows;
		}*/
		
		/**
		 * Collection session_items
		 */
		
		/**
		 * Add item in list
		 * @param object
		 */
		/*public function add_session($item)
		{
			parent::add_item($item,'session_items');
		}*/
		
		/**
		 * Add all items in list
		 * @param object
		 */
		/*public function add_all_session($session_items)
		{
			parent::add_all_items($session_items,'session_items');
		}*/
		
		/**
		 * Remove item from list
		 * @param int id
		 */
		/*public function remove_session($item)
		{
			parent::remove_item($item,'session_items');
		}*/
		
		/**
		 * Get item from list
		 * @param int id
		 */
		/*public function get_session($id)
		{
			return parent::get_item($id,'session_items');
		}*/
		
		/**
		 * Get all items from list
		 * @param int id
		 */
		/*public function get_all_session()
		{
			return parent::get_all_items('session_items');
		}*/
		
		/**
		 * List contains item
		 * @param int id
		 */
		/*public function isset_session($item)
		{
			return parent::isset_item($item,'session_items');
		}*/
		
		/**
		 * List is empty
		 * @param int id
		 */
		/*public function empty_session()
		{
			return parent::empty_list('session_items');
		}*/
		
		/**
		 * Count items from list
		 * @param int id
		 */
		/*public function count_session()
		{
			return parent::count_list('session_items');
		}*/
		
		/**
		 * Collection tentative_items
		 */
		
		/**
		 * Add item in list
		 * @param object
		 */
		/*public function add_tentative($item)
		{
			parent::add_item($item,'tentative_items');
		}*/
		
		/**
		 * Add all items in list
		 * @param object
		 */
	/*	public function add_all_tentative($tentative_items)
		{
			parent::add_all_items($tentative_items,'tentative_items');
		}*/
		
		/**
		 * Remove item from list
		 * @param int id
		 */
		/*public function remove_tentative($item)
		{
			parent::remove_item($item,'session_items');
		}*/
		
		/**
		 * Get item from list
		 * @param int id
		 */
		/*public function get_tentative($id)
		{
			return parent::get_item($id,'tentative_items');
		}*/
		
		/**
		 * Get all items from list
		 * @param int id
		 */
	/*public function get_all_tentative()
		{
			return parent::get_all_items('tentative_items');
		}*/
		
		/**
		 * List contains item
		 * @param int id
		 */
	/*	public function isset_tentative($item)
		{
			return parent::isset_item($item,'tentative_items');
		}
		*/
		/**
		 * List is empty
		 * @param int id
		 */
		/*public function empty_tentative()
		{
			return parent::empty_list('tentative_items');
		}*/
		
		/**
		 * Count items from list
		 * @param int id
		 */
		/*public function count_tentative()
		{
			return parent::count_list('tentative_items');
		}*/
	}
?>