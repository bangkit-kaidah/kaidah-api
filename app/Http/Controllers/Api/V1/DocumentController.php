<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Document;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $documents = Document::with(['status', 'subject', 'source', 'documentType']);

        $title = $request->input('search');
        if (isset($title)) {
            $documents->where('judul_dokumen', 'like', '%' . $title . '%');
        }

        $document_type_id = $request->input('type');
        if (isset($document_type_id)) {
            $documents->where('document_type_id', '=', $document_type_id);
        }

        $source_id = $request->input('source');
        if (isset($source_id)) {
            $documents->where('source_id', '=', $source_id);
        }

        $status_id = $request->input('status');
        if (isset($status_id)) {
            $documents->where('status_id', '=', $status_id);
        }

        $subject_id = $request->input('subject');
        if (isset($subject_id)) {
            $documents->where('subject_id', '=', $subject_id);
        }

        $order = $request->input('sort');
        if (isset($order) && $order === 'oldest') {
            $documents->orderBy('tanggal_penetapan', 'asc');
        } else {
            $documents->orderBy('tanggal_penetapan', 'desc');
        }

        return $documents->simplePaginate(5)->appends(request()->input());
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
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function show(Document $document)
    {
        $document = Document::where('id', $document->id)->with(['status', 'subject', 'source', 'documentType'])->get();
        
        $string = rtrim(trim(preg_replace( "/\r\n/", " ", $document[0]->judul_dokumen)), '.');
        $id = $document[0]->id;
        $related = Document::select(['id', 'judul_dokumen', 'status_id', 'tanggal_penetapan'])->where('judul_dokumen', 'like', '%'.$string.'%')->where('id', '<>', $id)->with(['status']);
        
        $pattern = "/^peraturan([\w \/\.]+)tentang([\w \/\.]+)/i";
        preg_match_all($pattern, $string, $matches);
        if(count($matches[2]) > 0)
        {
            $match = trim($matches[2][0]);
            $related_match = Document::select(['id', 'judul_dokumen', 'status_id', 'tanggal_penetapan'])->where('judul_dokumen', 'like', '%'.$match.'%')->where('id', '<>', $id)->with(['status']);

            $related = $related->union($related_match);
        }
        $related = $related->orderBy('tanggal_penetapan', 'desc')->get();
        $document[0]->related = $related;
        return $document;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Document $document)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function destroy(Document $document)
    {
        //
    }
}
