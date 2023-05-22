@section('styles')
<style>
    /* Important part */
    .modal-dialog {
        overflow-y: initial !important
    }

    .modal-body {
        height: 80vh;
        overflow-y: auto;
    }
    .modal-body li {
        margin-bottom: 10px;
    }
</style>
@endsection
<!-- Edit Modal -->
<div class="modal fade d-none" id="terms_and_condition" aria-hidden="true" role="dialog" data-bs-keyboard="false" data-bs-backdrop="static">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content rounded-4 border-2">
            <div class="modal-body pb-0">
                <div class="form-content p-2">
                    <div class="modal-header border-0 ps-0 pt-0">
                        <h4 class="modal-title border-bottom-3">Terms & Conditions</h4>
                    </div>
                    <div class="card mb-0" style="max-height:50vh; overflow-y: scroll;overflow-x: hidden;">
                        <div class="card-body">
                            <div class="row">
                                <ul>
                                    <li>
                                        <span style="font-family: Roboto;">
                                            ATMIA NEET College Predictor is a private business entity incorporated as sole proprietor firm in 2022 registered at Gujarat. NEET COLLEGE PREDICTOR is in service business of providing consultancy and advisory services mainly
                                            related to education, counselling and medical admissions.
                                        </span>
                                    </li>
                                    <li>
                                        <span style="font-family: Roboto;">
                                            ATMIA NEET College Predictor has NO liaison with any medical college or management of any medical college. ATMIA NEET College Predictor is NOT a government agency and doesn’t make any claim of influence on any counselling
                                            process.
                                        </span>
                                    </li>
                                    <li>
                                        <span style="font-family: Roboto;">
                                            ATMIA NEET College Predictor is represented in market place through two service names, NEET COLLEGE PREDICTOR and MBBS COLLEGE PREDICTOR. ATMIA NEET College Predictor has already filed for trademark registration of these
                                            services.
                                        </span>
                                    </li>
                                    <li>
                                        <span style="font-family: Roboto;">
                                            NEET COLLEGE PREDICTOR owns an online web application MBBS COLLEGE PREDICTOR which is an advanced data analytics based medical admission possibility predictor. MBBS COLLEGE PREDICTOR is an online service offering of NEET COLLEGE
                                            PREDICTOR.
                                        </span>
                                    </li>
                                    <li>
                                        <span style="font-family: Roboto;">
                                            MBBS COLLEGE PREDICTOR is designed on historical medical admission data. For 2023 predictions, MBBS COLLEGE PREDICTOR analyses counselling data of previous year. All the analytical reports are technology driven and based on
                                            entered user data.
                                        </span>
                                    </li>
                                    <li>
                                        <span style="font-family: Roboto;">
                                            MBBS COLLEGE PREDICTOR is currently developed on admission counselling data of MCC and 32 Indian states. The analytics and reports are auto-calculated on the basis of user data including NEET score, domicile, category and fee
                                            budget etc.
                                        </span>
                                    </li>
                                    <li>
                                        <span style="font-family: Roboto;">
                                            The user data is stored in the encrypted formats and no person or agency including NEET COLLEGE PREDICTOR has access to modify or delete the user’s data. The user data and credentials are stored on secured Google cloud
                                            servers.
                                        </span>
                                    </li>
                                    <li>
                                        <span style="font-family: Roboto;">
                                            MBBS COLLEGE PREDICTOR offers customized reports and analytics based on a specific user’s credentials such as domicile, category and NEET score. The reports and analytics are not generalized. Therefore, generated report
                                            content is not applicable to any other applicant.
                                        </span>
                                    </li>
                                    <li>
                                        <span style="font-family: Roboto;">
                                            The reports and analytics of MBBS COLLEGE PREDICTOR shall be used only as one input for planning of admission strategy. MBBS COLLEGE PREDICTOR does not claim or offer any directions for medical admission counselling process.
                                        </span>
                                    </li>
                                    <li>
                                        <span style="font-family: Roboto;">
                                            MBBS COLLEGE PREDICTOR or NEET COLLEGE PREDICTOR shall not be responsible for any loss of opportunity due to any of the reports and analytics. The user is advised to apply due diligence on the analysis of reports generated by
                                            MBBS COLLEGE PREDICTOR.
                                        </span>
                                    </li>
                                    <li>
                                        <span style="font-family: Roboto;">
                                            MBBS COLLEGE PREDICTOR, at present, estimates the admission possibility in MBBS for 646 medical colleges. NEET COLLEGE PREDICTOR is making continuous efforts to incorporate the admission data of remaining medical colleges and
                                            other courses as well.
                                        </span>
                                    </li>
                                    <li>
                                        <span style="font-family: Roboto;">
                                            MBBS COLLEGE PREDICTOR is designed on curated data of medical admissions. It is practically impossible to access and incorporate all the data entries into the application. MBBS COLLEGE PREDICTOR is curated to include approx 80%
                                            of admission counselling data for 2022.
                                        </span>
                                    </li>
                                    <li>
                                        <span style="font-family: Roboto;">
                                            MBBS COLLEGE PREDICTOR reports and predictions shall be considered as indicative and not final. The reports are directional in nature. NEET COLLEGE PREDICTOR or MBBS COLLEGE PREDICTOR claims no guarantee or assurance of medical
                                            admission.
                                        </span>
                                    </li>
                                    <li>
                                        <span style="font-family: Roboto;">
                                            Use of NEET COLLEGE PREDICTOR and MBBS COLLEGE PREDICTOR is completely voluntary in nature. ATMIA NEET College Predictor ensures due diligence in all the promotional communications. However, any reference to threat, fear or
                                            coercion is unintentional and inadvertent. ATMIA NEET College Predictor shall not be liable for any such action.
                                        </span>
                                    </li>
                                </ul>
                            </div>
                            <div class="text-end">
                                <button type="button" class="btn btn-sm btn-primary" data-bs-dismiss="modal">AGREE</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Edit Modal -->