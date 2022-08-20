<?php
add_action('graphql_input_fields', function ($fields, $type_name, $config) {
	if ($type_name === 'CreateUndanganInput' || $type_name === 'UpdateUndanganInput') {
		$fields = array_merge($fields, [
			'canva_link' => ['type' => 'String'],
			'musik_link' => ['type' => 'String'],
		]);
	}
	return $fields;
}, 20, 3);

add_action('graphql_post_object_mutation_update_additional_data', function ($post_id, $input, $mutation_name, $context, $info) {
	if (isset($input['canva_link'])) {
		// get the field by field name, found when exporting a field created through ACF gui.
		update_field('field_62b06d7736f90', $input['canva_link'], $post_id);
	}
	if (isset($input['musik_link'])) {
		// get the field by field name, found when exporting a field created through ACF gui.
		update_field('field_62b06e9f36f91', $input['musik_link'], $post_id);
	}
}, 10, 5);

function custom_jwt_expiration($expiration)
{
	return 3154e+7;
}

add_filter('graphql_jwt_auth_expire', 'custom_jwt_expiration', 10);
