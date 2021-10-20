<?php
/**
 * Created by PhpStorm.
 * User: Sajib Mridha
 * Mobile: 01979753333
 * Date: 06/10/2016
 * Time: 05:11 PM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Common_model extends CI_Model
{
    /**
     * Common_models constructor.
     * @userDetails
     * @changePassword
     * @userFullname
	 * @getData
     * @changeStatus
     * @deleteRow
     * @insertData
     */
    function __construct()
    {
        parent::__construct();
    }

	/**
     * @param $select
     * @param $table
     * @param string $where
     * @return mixed
     */
    public function getData( $select, $table, $where = '' ){

        if( $where !='' ):
            $this->db->where($where);
        endif;

        $this->db->select($select);
        $this->db->from($table);
        $query = $this->db->get();

        if( $query->num_rows() > 0 ):
           return $query->result();
        endif;

    }

    /**
     * @param $table
     * @param $data
     * @param $id
     * @return mixed
     */
    public function changeStatus( $table, $data, $id ){

        $this->db->where( 'id', $id );
        $this->db->update( $table, $data );

        if( $this->db->affected_rows() > 0 ):
            return $this->db->affected_rows();
        endif;

    }

    /**
     * @param $table
     * @param $id
     * @return mixed
     */
    public function deleteRow( $table, $id ){

        $this->db->where( 'id', $id );
        $this->db->delete($table);

        if( $this->db->affected_rows() > 0 ):
            return $this->db->affected_rows();
        endif;

    }

    /**
     * @param $table
     * @param null $data
     * @return mixed
     */
    public function insertData( $table, $data = null ){

        $this->db->insert( $table, $data );

        if( $this->db->affected_rows() > 0 ):
            return $this->db->affected_rows();
        endif;

    }

    /**
     * @param $table
     * @param int $id
     * @param null $data
     * @return mixed
     */
    public function dataUpdate( $table, $data = null, $id = 0 ){

        $this->db->where( 'id', $id );
        $this->db->update( $table, $data);

        if( $this->db->affected_rows() > 0 ):
            return $this->db->affected_rows();
        endif;

    }

    public function updateData( $table, $data = null, $where = array() ){

        $this->db->where( $where );
        $this->db->update( $table, $data);
        //echo $this->db->last_query();exit;
        if( $this->db->affected_rows() > 0 ):
            return $this->db->affected_rows();
        endif;

    }

    /**
     * @param $select
     * @param $table
     * @return mixed
     */
    public function getDataList( $select, $table ){

        $this->db->select( $select );
        $this->db->from( $table );
        $query = $this->db->get();
        if( $query->num_rows() > 0 ):
            return $query->result();
        endif;

    }

    /**
     * @param $select
     * @param $table
     * @param $data
     * @return mixed
     */
    public function getSingleData( $select, $table, $data ){

        $this->db->select( $select );
        $this->db->from( $table );
        $this->db->where( $data );
        $query = $this->db->get();

        if( $query->num_rows() > 0 ):
            return $query->result();
        endif;

    }

    /**
     * @param $select
     * @param $table
     * @param $where
     * @return mixed
     */
    public function getMultiData( $select, $table, $where ){

        $this->db->select( $select );
        $this->db->from( $table );
        $this->db->where( $where );
        $query = $this->db->get();
        if( $query->num_rows() > 0 ):
            return $query->result();
        endif;

    }

    /**
     * @param $select
     * @param $table
     * @param int $limit
     * @param int $offset
     * @param $order_by
     * @param $order_type
     * @return mixed
     */
    public function getLimitData( $select, $table, $limit = 0, $offset = 0, $order_by, $order_type, $where = '' ){

        if( !empty($where) ):
            $this->db->where($where);
        endif;

        $this->db->select( $select );
        $this->db->from( $table );
        $this->db->limit( $limit, $offset );
        $this->db->order_by( $order_by, $order_type );
        $query = $this->db->get();

        if( $query->num_rows() > 0 ):
            return $query->result();
        endif;

    }
    
    /**
     * @param $select
     * @param $table
     * @param $status
     * @return mixed
     */
    public function getCount( $select, $table, $status ){

        $this->db->select($select);
        $this->db->from($table);
        $this->db->where($status);
        $query = $this->db->get();

        if( $query->num_rows() > 0 ):
            return COUNT($query->result());
        endif;

    }

    /**
     * @param $select
     * @param $table
     * @param int $limit
     * @param int $offset
     * @param string $order_by
     * @param string $array rder_type
     * @param string $where
     * @return string data
     * @return mixed
     */
    public function getLimitDataCount( $select, $table, $where = ''){

        if( !empty($where) ):
            $this->db->where($where);
        endif;

        $this->db->select( $select );
        $this->db->from( $table );
        $query = $this->db->get();

        //echo $this->db->last_query();exit;

        if( $query->num_rows() > 0 ):
            return $query->num_rows();
        endif;

    }

    /**
     * @param $select
     * @param $table
     * @param int $limit
     * @param int $offset
     * @param string $order_by
     * @param string $array rder_type
     * @param string $where
     * @return string data
     * @return mixed
     */
    public function getLimitDataNew( $select, $table, $limit = 0, $offset = 0, $order_type, $where = '' ){

        if( !empty($where) ):
            $this->db->where($where);
        endif;

        $this->db->select( $select );
        $this->db->from( $table );
        $this->db->limit( $limit, $offset );
        $this->db->order_by( $order_type );
        $query = $this->db->get();

        echo $this->db->last_query();exit;

        if( $query->num_rows() > 0 ):
            return $query->result();
        endif;

    }

    /**
     * @param int $id
     * @return mixed
     */
    public function getSpecificInfoNav( $where ){

        $this->db->select('name');
        $this->db->from('adb_nav_menu');
        $this->db->where( $where );
        $query = $this->db->get();

        if( $query->num_rows() > 0 ):
            return $query->row()->name;
        endif;

    }

    public function getDataLimit($select, $table, $where, $limit){

        $this->db->select($select);
        $this->db->from($table);
        $this->db->where($where);
        $this->db->limit($limit);
        $query = $this->db->get();

        if( $query->num_rows() > 0 ):
            return $query->result();
        endif;
		
    }


}