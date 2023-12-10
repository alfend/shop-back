<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ListRequest;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Builder;
use PhpOffice\PhpSpreadsheet\IOFactory;

abstract class AbstractCrudController extends Controller
{
    abstract protected function createListQuery(ListRequest $request): Builder;

    protected function executeListQuery(ListRequest $request, $pagination = true, Builder $builder = null ): Paginator
    {
        $query = $this->applyListFilter(
            $builder ?: $this->createListQuery($request),
            $request,
            $request->getFilter()
        );

        $query->getQuery()->orders = [];
        $query->orderBy($request->getSort(), $request->getOrder());

        $perPage = $request->has('per_page') ? (int) $request->per_page : 10;

        return $pagination ? $query->paginate($perPage) : $query->paginate();
    }

    protected function applyListFilter(Builder $builder, ListRequest $request, array $filter = []): Builder
    {
        return $builder;
    }

    protected function buildXlsxResponse(\Staffim\SpreadsheetBuilder\Builder $builder, iterable $data, string $filename)
    {
        $phpExcel = $builder->build($data);
        $writer = IOFactory::createWriter($phpExcel, 'Xlsx');

        return response()->streamDownload(
            fn () => $writer->save('php://output'),
            $filename,
            [
                'Content-Type' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
            ]
        );
        /*
         *
        $disposition = response()->headers->makeDisposition(
            ResponseHeaderBag::DISPOSITION_ATTACHMENT,
            $filename
        );
        response()->headers->set('Content-Type', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        response()->headers->set('Content-Disposition', $disposition);
        response()->sendHeaders();
        $writer->save('php://output');
         */
    }
}
