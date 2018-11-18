<?php

namespace App\Repositories\CustomField;

interface InformationInterface{

	public function getAll();

	public function find($id);

	public function create(array $attributes);

	public function update($id, array $attributes);

	public function destroy($id);
}