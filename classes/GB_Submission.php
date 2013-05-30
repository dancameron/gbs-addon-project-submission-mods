<?php

class GB_Submission extends Group_Buying_Controller {

	public static function init() {
		add_filter( 'gb_deal_submission_fields', array( __CLASS__, 'project_submission_fields' ), 100, 1 );

		add_action( 'submit_deal', array( get_class(), 'project_submission_defaults' ), 5 ); // lower priority than the CF class and the Attribute class
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

	public function project_submission_defaults() {
		$_POST['gb-attribute']['attribute_id'] = array(
			0 => 0,
			1 => 0,
			2 => 0,
			3 => 0,
			4 => 0,
			5 => 0,
			6 => 0,
			7 => 0,
			8 => 0,
			9 => 0,
			10 => 0,
			11 => 0
		);

		$_POST['gb-attribute']['sku'] = array(
			0  => '',
			1  => '',
			2  => '',
			3  => '',
			4  => '',
			5  => '',
			6  => '',
			7  => '',
			8  => '',
			9  => '',
			10  => '',
			11  => ''
		);

		$_POST['gb-attribute']['title'] = array(
			0 => 'Pledge $10.00 for a 10 Points',
			1 => 'Pledge $20.00 for a 20 Votes',
			2 => 'Pledge $40.00 for a 40 Points ',
			3 => 'Pledge $60.00 for a 60 Points',
			4 => 'Pledge $100.00 for a 150 Points',
			5 => 'Pledge $250.00 for a 400 Points',
			6 => 'Pledge $500.00 for a 1000 Points ',
			7 => 'Pledge $1000.00 for a 2500 Points',
			8 => 'Pledge $1500.00 for 3500 Votes',
			9 => 'Pledge $2500.00 for a 7000 Points',
			10 => 'Pledge $5000.00 for a 15000 Points',
			11 => 'Pledge $10000.00 for a 40000 Points'
		);

		$_POST['gb-attribute']['price'] = array(
			0  => '',
			1  => '',
			2  => '',
			3  => '',
			4  => '',
			5  => '',
			6  => '',
			7  => '',
			8  => '',
			9  => '',
			10  => '',
			11  => ''
		);

		$_POST['gb-attribute']['max_purchases'] = array(
			0  => '',
			1  => '',
			2  => '',
			3  => '',
			4  => '',
			5  => '',
			6  => '',
			7  => '',
			8  => '',
			9  => '',
			10  => '',
			11  => ''
		);

		$_POST['gb-attribute']['description'] = array(
			0 => '10 Points',
			1 => '20 Points',
			2 => '40 Points',
			3 => '60 Points',
			4 => '150 Points - plus Digital download of the movie, PDF of the shooting script and movie production updates',
			5 => '400 Points - plus DVD and Digital download of the movie, PDF of the shooting script, movie production email updates
            Estimated delivery: Mar 2014 ',
			6 => '1000 Points – plus DVD and Digital download of the movie, PDF of the shooting script, movie production email updates and “Special Insiders Behind The Scenes Look” during principal photography of the “Return of The Triunes Movie.”
            Estimated delivery: Mar 2014 ',
			7 => '2500 Points – Includes DVD and Digital download of the movie, PDF of the shooting script, movie production email updates and “Special Insiders Behind The Scenes Look” during rehearsals and principal photography of the “Return of The Triunes Movie,” also includes special interviews with the Cast and Crew detailing why certain elements were chosen to appear in the movie.
            Estimated delivery: Mar 2014 ',
			8 => '3500 Points – ROTT Ultimate Fan Package. Includes T-shirt, Signed by cast - limited edition movie Poster, DVD and Digital download of the movie, PDF of the shooting script, movie production email updates and “Special Insiders Behind The Scenes Look” during rehearsals and principal photography of the “Return of The Triunes Movie,” also includes special interviews with the Cast and Crew detailing why certain elements were chosen to appear in the movie, and a special DVD documentary of “The Making of Return of The Triunes!”
            Estimated delivery: Mar 2014 ',
			9 => '7000 Points - Content Creator Selection - Everything in the ROTT Ultimate Fan Package - plus your content qualifies to appear in the “Return of The Triunes Movie!” You’ll receive credit in the movie and a listing on our website with link to your website. Plus you’ll get to spend a day on the set.  You’ll eat lunch with the cast and crew. (Does not include cost of travel)
            You will need to provide your own travel to our set, and your own lodging and transportation. We will film the movie in Louisiana and Mississippi. We’ll let you know the exact days and locations once filming is scheduled.
            Estimated delivery: Mar 2014',
			10 => '15000 Points - Background Actor - Everything in the ROTT Ultimate Fan Package - plus you will have a speaking role in the “Return of The Triunes Movie” scene. Includes, coaching with the Director, you’ll also attend rehearsal with the other actors in your scene,” and footage for your reel. You’ll spend the day on the set and appear in the foreground of a scene. You’ll eat lunch with the cast and crew. (Does not include cost of travel)
            You will need to provide your own travel to our set, and your own lodging and transportation. We will film the movie in Louisiana and Mississippi. We’ll let you know the exact days and locations once filming is scheduled.
            Estimated delivery: Mar 2014',
			11 => '40000 Points – You can either; write a scene for the movie or your business and logo will appear prominently in a scene, or a guaranteed speaking role in the movie.
            Plus everything in the ROTT Ultimate Fan Package - Includes T-shirt, Signed by cast - limited edition movie Poster, DVD and Digital download of the movie, PDF of the shooting script, movie production email updates and “Special Insiders Behind The Scenes Look” during rehearsals and principal photography of the “Return of The Triunes Movie,” also includes special interviews with the Cast and Crew detailing why certain elements were chosen to appear in the movie, and a special DVD documentary of “The Making of Return of The Triunes!”
            Plus two tickets to the movie premiere in New Orleans attended by the cast and creators, plus two tickets to the exclusive after-party also attended by the cast and creators.

            Estimated delivery: Mar 2014'
		);
	}
}
