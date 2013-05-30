<?php


class GB_Project_Submission_Addon {

	public static function init() {
		require_once 'GB_Submission.php';
		GB_Submission::init();
	}

	public static function gb_addon( $addons ) {
		$addons['project_submission'] = array(
			'label' => gb__( 'Project Submission Modifications' ),
			'description' => gb__( 'Project Submission mods and default rewards' ),
			'files' => array(),
			'callbacks' => array(
				array( __CLASS__, 'init' ),
			)
		);
		return $addons;
	}
}
