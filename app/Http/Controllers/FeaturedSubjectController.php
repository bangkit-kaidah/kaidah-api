<?php

namespace App\Http\Controllers;

use App\Models\FeaturedSubject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FeaturedSubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return FeaturedSubject::join('subjects', 'featured_subjects.subject_id', '=', 'subjects.id')
        ->leftJoin('documents', 'featured_subjects.subject_id', '=', 'documents.subject_id')
        ->select('featured_subjects.subject_id', 'subjects.name', DB::raw('count(judul_dokumen) as total_documents'))
        ->groupBy(['featured_subjects.subject_id', 'subjects.name'])
        ->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FeaturedSubject  $featuredSubject
     * @return \Illuminate\Http\Response
     */
    public function show(FeaturedSubject $featuredSubject)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FeaturedSubject  $featuredSubject
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FeaturedSubject $featuredSubject)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FeaturedSubject  $featuredSubject
     * @return \Illuminate\Http\Response
     */
    public function destroy(FeaturedSubject $featuredSubject)
    {
        //
    }
}
