<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Debugbar;

/**
 * @group Prueba
 *
 * Controllador de prueba
 */

class PruebaController extends Controller
{

     /**
     * * Create a user
	 *
	 * [Insert optional longer description of the API endpoint here.]
	 *
     * @urlParam id required The ID of the post.
     * @urlParam lang The language.
     * @bodyParam user_id int required The id of the user. Example: 9
     * @bodyParam room_id string The id of the room.
     * @bodyParam forever boolean Whether to ban the user forever. Example: false
     * @bodyParam another_one number Just need something here.
     * @bodyParam yet_another_param object required Some object params.
     * @bodyParam yet_another_param.name string required Subkey in the object param.
     * @bodyParam even_more_param array Some array params.
     * @bodyParam even_more_param.* float Subkey in the array param.
     * @bodyParam book.name string
     * @bodyParam book.author_id integer
     * @bodyParam book[pages_count] integer
     * @bodyParam ids.* integer
     * @bodyParam users.*.first_name string The first name of the user. Example: John
     * @bodyParam users.*.last_name string The last name of the user. Example: Doe
     * @response {
     *  "id": 4,
     *  "name": "Jessica Jones",
     *  "roles": ["admin"]
     * }
     */

	 public function createUser(Request $request)
	 {
        return  $request->all();
	 }

	/**
	 * @group Account management
	 *
	 */
	 public function changePassword()
	 {
        try {
            throw new Exception('foobar');
        } catch (Exception $e) {
            Debugbar::addThrowable($e);
        }
	 }
}
