<?php

class CategoryController extends \BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        $categories = Category::get();
        return Response::json(array(
                    'error' => false,
                    'categories' => $categories->toArray()), 200
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store() {

        $rules = Category::$rules;
        $data = Input::all();
        $validator = Validator::make($data, $rules);
        if ($validator->fails()) {
            return Response::json(array('error' => true, 'message' => $validator->messages()), 400);
        }

        $category = new Category;
        $category->inputData();
        $category->save();

        return Response::json(array('error' => false, 'category' => $category->toArray()), 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id) {

        $category = Category::find($id);

        return Response::json(array(
                    'error' => false,
                    'category' => $category->toArray()), 200
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {
        Category::destroy($id);
        return Response::json(array(
                    'error' => false,
                    'message' => 'category deleted'), 200
        );
    }

    /**
     * Get All Organisations of a Specific Category.
     *
     * @param  int  $id
     * @return Response
     */
    public function organisations($id) {
        $organisation = Category::find($id)->organisations()->get();
        return Response::json(array(
                    'error' => false,
                    'organisations' => $organisation->toArray()), 200
        );
    }

}
