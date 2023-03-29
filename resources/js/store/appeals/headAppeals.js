import $axios from '../axios-instance.js';
import {
	makeFilesFormDateFormJson,
	flatMultipleFilesErrors,
	processFileFormErrors
} from "../../support/files";

const moduleName = 'HeadAppeal'

export const mutationType = {
	retrieveAllAppealListRequest: `[${moduleName}] retrieveAllAppealListRequest`,
	retrieveAllAppealListSuccess: `[${moduleName}] retrieveAllAppealListSuccess`,
	retrieveAllAppealListError: `[${moduleName}] retrieveAllAppealListError`,
}

export const actionType = {
	retrieveAllAppealList: `[${moduleName}] retrieveAllAppealList`,
	retrieveMyAppealList: `[${moduleName}] retrieveMyAppealList`,
	retrieveMyList: `[${moduleName}] retrieveMyList`,
	retrieveAppeal: `[${moduleName}] retrieveAppeal`,
	ecxelExport: `[${moduleName}] ecxelExport`,
	excelExport: `[${moduleName}] excelExport`,
	excelExport2: `[${moduleName}] excelExport2`,
	excelExportMyAppeals: `[${moduleName}] excelExportMyAppeals`,
	reassignDistributor: `[${moduleName}] reassignDistributor`,
	reassignDistributorMultiple: `[${moduleName}] reassignDistributorMultiple`,
}

export const getterType = {
	getAppealList: `[${moduleName}] getAppealList`,
	getTotalAppealCount: `[${moduleName}] getTotalAppealCount`,
}

export default {
	state: {
		appealList: [],
		totalAppealCount: 0,
		appealListError: null,
		appealListErrorCode: 0
	},
	mutations: {
		[mutationType.retrieveAllAppealListRequest](state) {
			state.appealList = []
			state.totalAppealCount = 0
			state.appealListError = null
			state.appealListErrorCode = 0
		},
		[mutationType.retrieveAllAppealListError](state, { errorCode, errorMessage }) {
			state.appealList = []
			state.totalAppealCount = 0
			state.appealListError = errorMessage
			state.appealListErrorCode = errorCode
		},
		[mutationType.retrieveAllAppealListSuccess](state, obj) {
			state.appealList = obj.data
			state.totalAppealCount = obj.meta?.total
			state.appealListError = null
			state.appealListErrorCode = 0
		}
	},
	actions: {
		[actionType.retrieveAllAppealList](context, payload) {
			return new Promise((resolve, reject) => {
				$axios
					.get(`head/appeals`, { params: payload })
					.then(response => {
						context.commit(mutationType.retrieveAllAppealListSuccess, response.data)
						resolve(response.data.data)
					})
					.catch(error => {
						context.commit(mutationType.retrieveAllAppealListError, {
							errorCode: error.response.status,
							errorMessage: { message: error.response.data.message, data: error.response.data.errors }
						})
						console.log(error)
						reject(error)
					})
			})
		},
		[actionType.retrieveMyAppealList](context, payload) {
			return new Promise((resolve, reject) => {
				$axios
					.get(`head/appeals/indexByAuthUser`, { params: payload })
					.then(response => {
						resolve(response.data)
					})
					.catch(error => {
						console.log(error)
						reject(error)
					})
			})
		},
		[actionType.excelExport2](context, payload) {

			return new Promise((resolve, reject) => {
				$axios
					.get(`head/appeals/exportToExcel2`, { responseType: "arraybuffer", params: payload })
					.then(response => {
						resolve(response.data)
					})
					.catch(error => {
						console.log(error)
						reject(error)
					})
			})
		},
		[actionType.retrieveAppeal](context, payload) {
			return new Promise((resolve, reject) => {
				$axios
					.get(`head/appeals/${payload.id}`)
					.then(response => {
						resolve(response.data.data)
					})
					.catch(error => {
						console.log(error)
						reject(error)
					})
			})
		},
		[actionType.excelExport](context, payload) {

			return new Promise((resolve, reject) => {
				$axios
					.get(`head/appeals/exportToExcel`, { responseType: "arraybuffer", params: payload, timeout: 1000000000 })
					.then(response => {
						resolve(response.data)
					})
					.catch(error => {
						console.log(error)
						reject(error)
					})
			})
		},
		[actionType.excelExportMyAppeals](context, payload) {

			return new Promise((resolve, reject) => {
				$axios
					.get(`head/appeals/exportToExcelByAuthUser`, { responseType: "arraybuffer", params: payload })
					.then(response => {
						resolve(response.data)
					})
					.catch(error => {
						console.log(error)
						reject(error)
					})
			})
		},
		[actionType.ecxelExport](context, payload) {

			return new Promise((resolve, reject) => {
				$axios
					.get(`head/appeals/exportAppeals`, payload)
					.then(response => {
						resolve(response.data)
					})
					.catch(error => {
						console.log(error)
						reject(error)
					})
			})
		},
		[actionType.reassignDistributor](context, payload) {
			return new Promise((resolve, reject) => {
				$axios
					.post(`head/appeals/${payload.id}/reassign-distributor`, payload)
					.then(response => {
						resolve(response.data)
					})
					.catch(error => {
						console.log(error)
						reject(error)
					})
			})
		},
		[actionType.reassignDistributorMultiple](context, payload) {
			return new Promise((resolve, reject) => {
				$axios
					.post(`head/appeals/reassign-distributor`, payload)
					.then(response => {
						resolve(response.data)
					})
					.catch(error => {
						console.log(error)
						reject(error)
					})
			})
		},
	},
	getters: {
		[getterType.getAppealList]: (state) => {
			return state.appealList;
		},
		[getterType.getTotalAppealCount]: (state) => {
			return state.totalAppealCount;
		},
	},
}
