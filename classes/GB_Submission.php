<?php

class GB_Submission extends Group_Buying_Controller {

	public static function init() {
		add_filter( 'gb_deal_submission_fields', array( __CLASS__, 'project_submission_fields' ), 100, 1 );

	}

	public function project_submission_fields( $fields ) {
		//unset( $fields['description'] );
		//unset( $fields['thumbnail'] );
		unset( $fields['exp'] );
		unset( $fields['price'] );
		//unset( $fields['highlights'] );
		unset( $fields['fine_print'] );
		unset( $fields['purchase_limits'] );
		unset( $fields['deal_details'] );
		unset( $fields['project_info'] );
		unset( $fields['min_purchases'] );
		unset( $fields['deal_goal'] );
		unset( $fields['sponsor_payment'] );
		unset( $fields['attributes'] );

		$fields['highlights']['label'] = self::__( 'More Details' );

		$fields['locations'] = array(
			'weight' => 1002,
			'label' => self::__( 'YouTube' ),
			'type' => 'text',
			'required' => FALSE,
			'default' => ''
		);
		return $fields;
	}

}
